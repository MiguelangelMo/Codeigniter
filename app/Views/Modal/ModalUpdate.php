<?php
if (isset($_GET['ID'])) {
    print_r("ID" . $_GET['ID']);
} else { }

?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="http://localhost/Codeignater/CodeIgniter4-4.0.0-rc.3/public/Form/update">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" value="<?php  ?>" name="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Country Code</label>
                        <select class="form-control" name="CountryCode" id="exampleFormControlSelect1">
                            <?php foreach (select() as $items) {
                                echo "<option value = " . $items . ">" . $items . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">District</label>
                        <input type="text" name="District" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="District">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Popalation</label>
                        <input type="number" name="Population" class="form-control" id="exampleInputPassword1" placeholder="Population">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>