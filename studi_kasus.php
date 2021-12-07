<?php
function inputan($data)
{
    $tags="";
    foreach($data as $tag=>$value)
    {
        $tags=$tags.' '.$tag."='".$value."' ";
    }
    return "<input type='text' $tags>";
}

$tag=array('name'=>'nama','placelholder'=>'masukan nama anda','value'=>'nuris akbar');
echo inputan($tag);

?>
