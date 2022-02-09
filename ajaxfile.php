<?php
## Database configuration
include 'db.php';

class Index extends Database
{


    public $draw;
    public $row;
    public $rowperpage;
    public $columnIndex;
    public $columnName;
    public $columnSortOrder;
    public $searchValue;

    public $searchArray;


    public function setValues()
    {

        ## Read value
        $this->draw = $_POST["draw"];
        $this->row = $_POST["start"];
        $this->rowperpage = $_POST['length']; // Rows display per page
        $this->columnIndex = $_POST['order'][0]['column']; // Column index
        $this->columnName = $_POST['columns'][$this->columnIndex]['data']; // Column name
        $this->columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
        $this->searchValue = $_POST['search']['value']; // Search value

        $this->searchArray = array();


        ## Search 
        $searchQuery = " ";
        if ($this->searchValue != '') {
            $searchQuery = " AND (first_name LIKE :first_name or 
        middle_name LIKE :middle_name OR 
        phone LIKE :phone ) ";
            $this->searchArray = array(
                'first_name' => "%$this->searchValue%",
                'middle_name' => "%$this->searchValue%",
                'phone' => "%$this->searchValue%"
            );
        }

        ## Total number of records without filtering
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS allcount FROM client ");
        $stmt->execute();
        $records = $stmt->fetch();
        $totalRecords = $records['allcount'];

        ## Total number of records with filtering
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS allcount FROM client WHERE 1 " . $searchQuery);
        $stmt->execute($this->searchArray);
        $records = $stmt->fetch();
        $totalRecordwithFilter = $records['allcount'];

        ## Fetch records
        $stmt = $this->conn->prepare("SELECT * FROM client WHERE 1 " . $searchQuery . " ORDER BY " . $this->columnName . " " . $this->columnSortOrder . " LIMIT :limit,:offset");

        // Bind values
        foreach ($this->searchArray as $key => $search) {
            $stmt->bindValue(':' . $key, $search, PDO::PARAM_STR);
        }

        $stmt->bindValue(':limit', (int)$this->row, PDO::PARAM_INT);
        $stmt->bindValue(':offset', (int)$this->rowperpage, PDO::PARAM_INT);
        $stmt->execute();
        $empRecords = $stmt->fetchAll();

        $data = array();

        foreach ($empRecords as $row) {
            $data[] = array(
                'first_name' => $row['first_name'],
                'middle_name' => $row['middle_name'],
                'last_name' => $row['last_name'],
                'date' => $row['date'],
                'chair_first_name' => $row['chair_first_name'],
                'chair_last_name' => $row['chair_last_name'],
                'meeting' => $row['meeting'],
                'malaria' => $row['malaria'],
                'phone' => $row['phone'],
                'mjazaji1' => $row['mjazaji1'],
                'mjazaji2' => $row['mjazaji2'],
                'mjazaji3' => $row['mjazaji3'],
                'mjazaji_date' => $row['mjazaji_date'],
                'mkaguzi1' => $row['mkaguzi1'],
                'mkaguzi2' => $row['mkaguzi2'],
                'mkaguzi3' => $row['mkaguzi3'],
                'mkaguzi_date' => $row['mkaguzi_date']
            );
        }

        ## Response
        $response = array(
            "draw" => intval($this->draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        echo json_encode($response);
    }

}

$index = new Index();
$index->setValues();
