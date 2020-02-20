
<?php

class Controller {
  public $load;
  public $model;

  public function __construct() {
    $this->load = new Load();
    $this->model = new Model();

    if (isset($_GET['method'])) {
      if ($_GET['method']== "show") {
        $this->show($_GET['id']);
      }

      elseif($_GET['method']== "add" ) {
        $this->add();
      }

      elseif($_GET['method']== "edit" ) {
        $this->edit($_GET['id']);
      }
      elseif($_GET['method']== "delete" ) {
        $this->delete($_GET['id']);
      }


    }elseif (isset($_POST['method'])){
      if ($_POST['method'] == "store"){
        $this->store();

    }

    elseif($_POST['method']== "update") {
      $this->update();

    }
}
    else {
      $this->welcome();
    }

  }

  private function welcome() {
    $data = $this->model->listUsers();
    $this->load->view('welcome.php', $data);
  }
  private function show($id) {
    $data = $this->model->showUsers($id);
    $this->load->view('show.php', $data);

  }
  private function add(){
    $this->load->view('add.php');
  }

  private function store(){
    if($this->model->addUsers()){
      header('Location: ./');
    }
  }

  private function edit($id){
    $data = $this->model->showUsers($id);
    $this->load->view('edit.php', $data);
  }


private function update(){
  if($this->model->updUser());
  header('Location: ./');
}
private function delete($id){
    $data = $this->model->deleteUsers($id);
      header('Location: ./');
}

}
