
<?php
class BaseController
{
    const VIEW_FOLDER_NAME = 'Views';
    const MODEL_FOLDER_NAME = 'Models';
    /*
    Quy tắc về đường dẫn:
    + pass name: folderName.fileName
    + Lấy tên thư mục từ sau thư mục View
    */
    protected function view($viewPath, array $data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }


        $viewPath = self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/', $viewPath) . '.php';
        require($viewPath);
    }

    protected function loadModel($modelPath)
    {
        $modelPath = self::MODEL_FOLDER_NAME . '/' . $modelPath . '.php';
        require($modelPath);
    }
}