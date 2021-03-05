<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../includes/link.php"); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable(
        {
            "order": [[ 0, "desc" ]]
        });
        $('.dataTables_length').addClass('bs-select');
    });
</script>
<?php include("header.php"); ?>
<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 ">
                    <h4>Parcel Receiving</h4>
                </div>


<style>
                
    th{
        cursor: pointer;
    }
                </style>

                <div class="col-12 ">
                    <table id="dtBasicExample" class="table">
                        <thead>
                            <tr>
                                <th class="th-sm">ID

                                </th>
                                <th class="th-sm">Invoice No

                                </th>
                                <th class="th-sm">Attachment

                                </th>
                                <th class="th-sm">Receipt

                                </th>
                                <th class="th-sm">Seller Id</th>
                                <th class="th-sm">Seller Name
                                </th>
                                <th class="th-sm">Seller Mobile
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $rs = getParcel();
                            while($data = mysqli_fetch_assoc($rs)):  
                                $dven = getVendor($data["vid"]);
                            ?>
                            <tr>
                                <td><?php echo $data["id"] ?></td>
                                <td><?php echo $data["invoiceno"] ?></td>
                                <td><a href="../parcel/attachment/<?php echo $data["attachment"] ?>" download>Attachment</a></td>
                                <td><a href="../parcel/courier/<?php echo $data["receipt"] ?>" download>Receipt</a></td>
                                <td><?php echo $data["vid"] ?></td>
                                <td><?php echo $dven["name"] ?></td>
                                <td><?php echo $dven["mobile"] ?></td>
                                
                            </tr>
                            <?php endwhile; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>