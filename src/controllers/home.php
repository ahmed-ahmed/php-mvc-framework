<?php
class Home extends ControllerBase {
    protected function Index() {
        $viewModel = new \models\HomeModel();

        $this.$this->returnView($viewModel->Index(), true);
    }
}
