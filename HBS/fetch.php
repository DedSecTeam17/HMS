<?php
include('connect.php');
$output = '';
$sql = 'select * from doctors where doc_name  like "%'.$_POST["search"].'%" OR section_name like "%'.$_POST["search"].'%"';
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $output .= "
            <div class='card2 col-lg-3 col-md-3 col-sm-4 col-xs-12' style='padding:10px'>
                                <form action='insertbooks.php' method='post'>
                                        <div class='card' style='background-color:#fff'>
                                            <h4 class='card-title text-primary' name='h4'>".$row["doc_name"]."</h4>
                                            <h6 class='card-subtitle mb-2 text-muted'>".$row["section_name"]."</h6>
                                            <h6 class='card-text'>The doctor work at ".$row["am_pm"]."</h6>
                                            <h6 class='card-text text-danger'>".$row["date"]."</h6>

                                            <input type='hidden'  name='doc_name' value='".$row["doc_name"]."'>
                                            <input type='hidden'  name='hos_name' value='".$row["hos_name"]."'>
                                            <input type='hidden'  name='section_name' value='".$row["section_name"]."'>
                                            <input type='hidden'  name='doc_apm' value='".$row["am_pm"]."'>
                                            <input type='hidden'  name='doc_date' value='".$row["date"]."'>
                                            <button type='submit' name='submit' class='btn btn-sm btn-primary card-link'>Book</button>
                                        </div>
                                        
                                </form>
                                    </div>
            ";
    }
    echo $output;
} else {
    echo '
                            <div class="alert alert-warning alert-dismissible " role="alert">
                            <strong>Sorry!</strong> The Data you entered does not exist.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            ';
}

?>