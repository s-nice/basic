<?php

class ItemCategoryController extends BackendController
{
    public $content_title="商品分类";

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Category('create');
        $action = 'category';

        if (isset($_POST['Category'])) {
            //Uncomment the following line if AJAX validation is needed
//            $this->performAjaxValidation($model);
            $model->attributes = $_POST['Category'];
            $parent_node = $_POST['Category']['node'];
            if ($parent_node != 0) {
                $node = Category::model()->findByPk($parent_node);
                $model->appendTo($node);
            }
            if ($model->saveNode()) {
                $this->redirect(array('admin'));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);
        $model->scenario = 'update';
        $action = 'category';

        if (isset($_POST['Category'])) {
            // Uncomment the following line if AJAX validation is needed
            $this->performAjaxValidation($model);
            $model->attributes = $_POST['Category'];
            $parent_node = $_POST['Category']['node'];
            if ($parent_node != 0) {
                $node = Category::model()->findByPk($parent_node);
                $parent = $model->parent()->find();
                if ($node->category_id !== $model->category_id && $node->category_id !== $parent->category_id) {
                    $model->moveAsLast($node);
                }
            } else {
                if (!$model->isRoot()) {
                    $model->moveAsRoot();
                }
            }

            if ($model->saveNode()) {
                $this->redirect(array('admin'));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * @param $id
     * @throws CHttpException
     */
    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->deleteNode();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $this->render('admin');
    }

    /**
     * @param $id
     * @return static
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = Category::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

}
