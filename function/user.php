<?Php 

function insert_data($data){
    global $link;
    // die($data);
    $query = "INSERT INTO categories  (nama) VALUES ('$data')";
    // die(mysqli_query($link,$query));
	if (mysqli_query($link,$query)) {
		return true;
	}else{
		return false;
	}
}

function cek_data(){
   global $link;
    $query = "SELECT * FROM categories ";

    $result = mysqli_query($link,$query);

    //  $data = mysqli_fetch_row($result);
    return $result;
   
}

function hapus_data($id){
    
   global $link;
	$query = "DELETE FROM categories WHERE id = '$id' ";
	global $link;

	if (mysqli_query($link,$query)) return true;
	return false;
}

function tampilkan_per_id($id){
    global $link;

	$query = "SELECT * FROM categories WHERE id = $id";
	
	if ($result = mysqli_query($link,$query)) {
		return $result;
	}

}


function edit_data($nama,$id){

    global $link;

	$query = "UPDATE categories SET nama='$nama' WHERE id =$id ";
   
	if (mysqli_query($link,$query)) return true;
	return false;
}