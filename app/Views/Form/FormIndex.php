<body>
    <div class="container">
        <form action="saveForm" method="post">
            <div class="form-group">
                <?php
                echo form_label('Name', 'name');
                echo form_input(array('name' => 'Name', 'id' => 'name', 'class' => 'form-control', 'placeholder' => 'Name'));
                echo "</div>";
                echo '<div class="form-group">';
                echo form_label('CountryCode', 'CountryCode');
                echo form_input(array('name' => 'CountryCode', 'id' => 'CountryCode', 'class' => 'form-control', 'placeholder' => 'Country'));
                echo "</div>";
                echo '<div class="form-group">';
                echo form_label('District', 'District');
                echo form_input(array('name' => 'District', 'id' => 'District', 'class' => 'form-control', 'placeholder' => 'District'));
                echo "</div>";
                echo '<div class="form-group">';
                echo form_label('Population', 'Population');
                echo form_input(array('name' => 'Population', 'id' => 'Population', 'class' => 'form-control', 'placeholder' => 'Population'));

                echo form_submit(array('value' => 'Save', 'class' => 'btn btn-info',));

                ?>
            </div>
        </form>
    </div>
</body>