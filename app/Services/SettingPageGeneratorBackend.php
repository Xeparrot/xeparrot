<?php

namespace App\Services;

use Illuminate\Http\Request;

class SettingPageGeneratorBackend {

    /**
     * @param Request $request
     * @return $this|false|string
     */

    public $view;
    public $title;
    public $controls = null;
    public $post_route;
    public $categories = [];
    public $category_details = [];
    public $categoryallData = [];

    public function __construct($title,$view,$post_route)
    {
        $this->view = $view;
        $this->title = $title;
        $this->post_route = $post_route;
    }


    public function renderControllers()
    {
        return $this->controls;
    }


    public static function array_has_dupes($array) {
        // streamline per @Felix
        return count($array) !== count(array_unique($array));
    }


    public function addController($name,$isRequired,$label,$description,$category,$type,$value = null,$data = null)
    {

        if($this->categories)
        {

            $arrayCheck =  in_array($category,$this->categories);
            if($arrayCheck)
            {

            }else{

                array_push($this->categories,$category);
            }
        }else{
            array_push($this->categories,$category);
        }

        if($isRequired == true)
        {
            $requeredElement = '<span style="color: red">*</span>';
            $requiredParams = 'required=""';
        }elseif ($isRequired == false)
        {
            $requiredParams = '';
            $requeredElement = '';
        }else{
            $requiredParams = '';
            $requeredElement = '';
        }

        if($type == 'text'){

          $outData = '<label>'.$label.$requeredElement.'  : </label><br>
                         <label><small>'.$description.'</small></label>
                         <input type="'.$type.'" class="form-control" value="'.$value.'" name="'.$name.'" '.$requiredParams.' autocomplete="off"><br>';
          $formGroup = '<div class="form-group">'.$outData.'</div><br>';
          $this->controls .= $formGroup;

          $arrayDetails = [
              'category_name' => $category,
              'html_content_data' => $outData
          ];

          array_push($this->categoryallData,$arrayDetails);

          /*
           * @description: attach layer
           */




        }elseif ($type == 'select'){

            $drowdownData = null;
            if(count($data) != 0){
                foreach ($data as $dataItem)
                {
                    if($value == [$dataItem['value']])
                    {
                        $drowdownData .= '<option value="'.$dataItem['value'].'" selected>'.$dataItem['name'].'</option>';
                    }else{
                        $drowdownData .= '<option value="'.$dataItem['value'].'">'.$dataItem['name'].'</option>';
                    }

                }
            }
            $outData = '<label>'.$label.$requeredElement.'  : </label><br>
                         <label><small>'.$description.'</small></label>            
                         <select type="'.$type.'" class="form-control" value="'.$value.'" name="'.$name.'" '.$requiredParams.'>'.$drowdownData.'</select><br>';
            $formGroup = '<div class="form-group">'.$outData.'</div><br>';
            $this->controls .= $formGroup;

            /*
            * @description: attach layer
            */
            $arrayDetails = [
                'category_name' => $category,
                'html_content_data' => $outData
            ];

            array_push($this->categoryallData,$arrayDetails);


        } elseif ($type == 'textarea')
        {
            $outData = '<label>'.$label.$requeredElement.'  : </label><br>
                         <label><small>'.$description.'</small></label>
                         <textarea type="'.$type.'" class="form-control" name="'.$name.'" '.$requiredParams.' autocomplete="off">'.$value.'</textarea><br>';
            $formGroup = '<div class="form-group">'.$outData.'</div><br>';
            $this->controls .= $formGroup;

             /*
               * @description: attach layer
               */

            $arrayDetails = [
                'category_name' => $category,
                'html_content_data' => $outData
            ];

            array_push($this->categoryallData,$arrayDetails);

        } elseif ($type == 'file'){

            $outData = '<label>'.$label.$requeredElement.' : </label>
                                    <div class="input-group" data-toggle="xemuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="'.$name.'" class="selected-files" value="'.$value.'">
                                    </div>
                                    <div class="file-preview box sm">
                                    </div><br>';
            $formGroup = '<div class="form-group">'.$outData.'</div>';
            $this->controls .= $formGroup;

             /*
              * @description: attach layer
              */
            $arrayDetails = [
                'category_name' => $category,
                'html_content_data' => $outData
            ];

            array_push($this->categoryallData,$arrayDetails);

        }

        return $this->controls;

    }



    public function renderPage()
    {
       return 'backend.generated_page.admin_page_generator';
    }

    public function getCategorie()
    {
        return $this->categories;
    }


    public  function getCategoryDetail()
    {
        return  $this->categoryallData;
    }

    public function getContentByCategory($categoryName)
    {
        $getContents = $this->categoryallData;

        $outputJson = null;

        foreach ($getContents as $itemDetails)
        {
            if($itemDetails['category_name'] == $categoryName)
            {
              $outputJson .= $itemDetails['html_content_data'];
            }
        }

      return $outputJson;
    }

    public function getContent()
    {
        $category = $this->categories;
        $outData = [];

        foreach($category as $categriesData)
        {
            $outDataSub = [
              'category' =>   $categriesData,
              'html_content' => self::getContentByCategory($categriesData)
            ];

            array_push($outData,$outDataSub);


        }

        return $outData;
    }


}