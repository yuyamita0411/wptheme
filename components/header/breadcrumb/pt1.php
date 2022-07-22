<nav class="col-12 col-md-10 col-lg-8 pr-2 pl-2 pb-4 m-auto">
  <?php
  echo GenerateHtml::GenerateBeadcrumb(
    array(
      'ulclass' => 'breadcrumb mb-0',
      'liclass' => 'breadstr',
      'liarrowclass' => 'breadarrowstr pl-1 pr-1',
      'liarrowelem' => '<',
      'aclass' => "cursor",
      'toppagestr' => 'Home',
      'notfoundstr' => 'ページが見つかりません',
      'resultstr' => 'の検索結果'
    )
  );
  ?>
</nav>
<?php
  add_action('wp_footer', function(){
    $obj = CustomizeBreadCrumb::ReturnBreadCrumbColor();
    ?>
    <style type="text/css">
      .breadcrumb{
        background-color:<?php echo $obj->background; ?>; 
      }
      .breadcrumb .breadstr, .breadcrumb .breadstr a{
        color:<?php echo $obj->color; ?>; 
      }
      .breadcrumb .breadstr:hover, .breadcrumb .breadstr a:hover{
        color:<?php echo $obj->hover; ?>; 
      }
      .breadarrowstr{
        color:<?php echo $obj->arrowcolor; ?>;
      }
    </style>
    <?php
  });
?>