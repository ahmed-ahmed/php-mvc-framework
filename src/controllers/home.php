<?php
use models\HomeModel;

class Home extends ControllerBase {
    protected function Index() {
        $viewModel = new HomeModel();
        $this->returnView($viewModel->Index(), true);
    }
}
