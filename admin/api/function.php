<?php
require('../../connection.inc.php');
function pr($arr){
    echo '<pre>';
    print_r($arr);

}
function prx($arr){
    echo '<pre>';
    print_r($arr);
    die();
}
function get_properties($con,$limit='',$property_id=''){
    $sql="select * from properties";
    if($property_id!=''){
        $sql.=" and property_id=$property_id ";
    }
    $sql.=" order by property_id desc";
    if($limit!=''){
        $sql.=" limit $limit";
    }

    $res=mysqli_query($con,$sql);
    $data[]=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }
    return $data;

}

function get_propertiesByWhere($con){
    $sql="SELECT * FROM properties a WHERE a.delivery_type='Sale'";
   

    $res=mysqli_query($con,$sql);
    $data[]=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }
    return $data;

}
function get_propertiesByWhereRent($con){
    $sql="SELECT * FROM properties a WHERE a.delivery_type='Rent'";
   

    $res=mysqli_query($con,$sql);
    $data[]=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }
    return $data;

}



function get_property_detail($con,$id){
    $sql="select properties.*,agent.* from properties inner join agent on properties.agent_id=agent.agent_id where properties.property_id='$id'";
    
    $res=mysqli_query($con,$sql);
    $data[]=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }
    return $data;
}

function get_safe_value($con,$str){
    if($str!='null'){
        $str=trim($str);
        return mysqli_real_escape_string($con,$str);
    }
}

//for android joson

function get_propertiesByWhere_android($con){
    $sql="SELECT * FROM properties a WHERE a.delivery_type='Sale'";
   

    $res=mysqli_query($con,$sql);
    $data[]=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }
    return json_encode($data);
}
//get safevalues for android
function get_safe_value_android($con,$str){
    if($str!='null'){
        $str=trim($str);
        return mysqli_real_escape_string($con,$str);
        function get_safe_value($con,$str){
    if($str!='null'){
        $str=trim($str);
        // return mysqli_real_escape_string($con,$str);
        print_r(json_encode(mysqli_real_escape_string($con,$str)));
    }
}
    }
}

//get properties for android

function get_properties_android($con,$limit='',$property_id=''){
    $sql="select * from properties";
    if($property_id!=''){
        $sql.=" and property_id=$property_id ";
    }
    $sql.=" order by property_id desc";
    if($limit!=''){
        $sql.=" limit $limit";
    }

    $res=mysqli_query($con,$sql);
    $data[]=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }
    return json_encode($data);

}

?>