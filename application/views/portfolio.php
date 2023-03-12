<?php // $this->load->view('common/header'); ?>

<!-- Datatable CSS -->
<link href='https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<link href='https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>

<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Datatable JS -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

<section class="about">
    <div class="contact">
        <div class="container">
            <div class="row">
                        <?php //echo print_r($enquiry)  ?>
                <?php if(empty($enquiry)){ ?>
                <B>No Records Found.</B>
                <?php } else { ?>
                <table id="example" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <!-- <th>Start date</th>
                            <th>Salary</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $Count=1;?>
                        <?php foreach($enquiry as $row){ ?>
                        <tr>
                            <td><?php echo $Count ?></td>
                            <td><?php echo $row->name ?></td>
                            <td><?php echo $row->email ?></td>
                            <td><?php echo $row->mobile ?></td>
                            <!-- <td>2011-04-25</td>
                            <td>$320,800</td> -->
                        </tr>

                        <?php $Count++; } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                </table>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<script>
    // $(document).ready(function() {
    //     $('#example').DataTable({
    //         dom: 'Bfrtip',
    //         buttons: [
    //             'copy', 'csv', 'excel', 'pdf'
    //         ]
    //     });
    // });

    $(document).ready(function() {
        var empDataTable = $('#example').DataTable({
            dom: 'Blfrtip',
            buttons: [{
                    extend: 'copy'
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: [0, 1] // Column index which needs to export
                    }
                },
                {
                    extend: 'csv',
                },
                {
                    extend: 'excel',
                }
            ]

        });

    });
</script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> -->

<?php // $this->load->view('common/footer'); ?>