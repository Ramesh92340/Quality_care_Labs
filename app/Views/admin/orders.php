<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">

        <h1>Orders</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active">Orders </div>

        </div>
    </div>


    <div class="section-body">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">S.No</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Total Amount</th>
                                <th class="text-center">Items</th>
                                <th class="text-center">Time</th>
                                <th class="text-center">Details</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php if (isset($orders) && !empty($orders)): ?>
                                <?php $i = 1; ?>
                                <?php foreach ($orders as $order): ?>
                                    <tr>
                                        <td class="text-center"><?= $i; ?></td>
                                        <td class="text-center"><?= $order['user']['first_name']; ?></td>
                                        <td class="text-center"><?= $order['total_amount'] ?></td>
                                        <?php if (isset($order['cart_details']) && !empty($order['cart_details'])): ?>
                                            <td class="text-center">
                                                <?php foreach ($order['cart_details'] as $cart):
                                                    if ($cart['services']):
                                                        echo 'Services - ' . $cart['servicesqty'] . '<br>';
                                                    endif;
                                                    if ($cart['packages']):
                                                        echo 'Packages - ' . $cart['packagesqty'] . '<br>';
                                                    endif;
                                                    if ($cart['healthrisk']):
                                                        echo 'Heath Risk -' . $cart['healthriskqty'] . '<br>';
                                                    endif;
                                                endforeach; ?>
                                            </td>
                                        <?php else: ?>
                                            <td colspan="7" class="text-center">No Items found</td>
                                        <?php endif; ?>
                                        <?php
                                        $date = new DateTime($order['created_at']);
                                        ?>
                                        <td class="text-center"><?= $date->format('Y-m-d H:i:s') ?></td>

                                        <td class="text-center">

                                            <button id="openModelBtn<?= $order['id'] ?>" class='btn btn-primary'>Order
                                                Details</button>


                                            <div id="model<?= $order['id'] ?>" class="model">
                                                <div class="model-content">
                                                    <span class="close" id="close<?= $order['id'] ?>"
                                                        style="color:black">&times;</span>
                                                    <h3 class="h3">Order Details</h3>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" class="text-center">SL.NO</th>
                                                                <th scope="col" class="text-center">Type</th>
                                                                <th scope="col" class="text-center">ID</th>
                                                                <th scope="col" class="text-center">Quantity</th>
                                                                <th scope="col" class="text-center">Price</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php 
                                                            $ids=0;

                                                            foreach ($order['cart_details'] as $cart):
                                                             
                                                                ?>
                                                                <?php $ids++; ?>
                                                                <tr>
                                                                    <th scope="row" class="text-center"><?= $ids ?></th>
                                                                    
                                                                    <td class="text-center">
                                                                        <?php
                                                                        if ($cart['services']):
                                                                            echo 'Services';
                                                                        elseif ($cart['packages']):
                                                                            echo 'Packages';
                                                                        elseif ($cart['healthrisk']):
                                                                            echo 'Heath Risk';
                                                                        endif; ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?php
                                                                        if ($cart['services']):
                                                                            echo $cart['services'];
                                                                        elseif ($cart['packages']):
                                                                            echo $cart['packages'];
                                                                        elseif ($cart['healthrisk']):
                                                                            echo $cart['healthrisk'];
                                                                        endif; ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?php
                                                                        if ($cart['services']):
                                                                            echo $cart['servicesqty'];
                                                                        elseif ($cart['packages']):
                                                                            echo $cart['packagesqty'];
                                                                        elseif ($cart['healthrisk']):
                                                                            echo $cart['healthriskqty'];
                                                                        endif; ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?php
                                                                        foreach (json_decode($order['cart_ids']) as $key => $value):
                                                                            if ($cart['id'] == $key):
                                                                                echo $value;
                                                                            endif;
                                                                         
                                                                        endforeach;
                                                                        ?>
                                                                    </td>
                                                                </tr>
                                                                <?php 
                                                            endforeach; ?>
                                                            <tr>
                                                                <th colspan="4" class="text-center">Total</th>
                                                                <td class="text-center">
                                                                    <?php echo $order['total_amount'] ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>


                                        </td>
                                        <style>
                                            .model {
                                                display: none;
                                                /* Hidden by default */
                                                position: fixed;
                                                /* Stay in place */
                                                z-index: 1;
                                                /* Sit on top */
                                                left: 0;
                                                top: 0;
                                                width: 100%;
                                                /* Full width */
                                                height: 100%;
                                                /* Full height */
                                                overflow: auto;
                                                /* Enable scroll if needed */
                                                background-color: rgb(0, 0, 0);
                                                /* Fallback color */
                                                background-color: rgba(0, 0, 0, 0.4);
                                                /* Black w/ opacity */
                                            }

                                            .model-content {
                                                background-color: #fefefe;
                                                margin: 20% 30%;
                                                /* 15% from the top and centered */
                                                padding: 20px;
                                                border: 1px solid #888;
                                                width: 50%;
                                                /* Could be more or less, depending on screen size */
                                                border-radius: 15px;
                                            }

                                            .close {
                                                color: red;
                                                float: right;
                                                font-size: 28px;
                                                font-weight: bold;
                                            }

                                            .close:hover,
                                            .close:focus {
                                                color: black;
                                                text-decoration: none;
                                                cursor: pointer;
                                            }
                                        </style>

                                        <script>
                                            document.getElementById('openModelBtn<?= $order['id'] ?>').onclick = function () {
                                                document.getElementById('model<?= $order['id'] ?>').style.display = "block";
                                            }

                                            document.getElementById('close<?= $order['id'] ?>').onclick = function () {
                                                document.getElementById('model<?= $order['id'] ?>').style.display = "none";
                                            }

                                            window.onclick = function (event) {
                                                if (event.target == document.getElementById('model')) {
                                                    document.getElementById('model').style.display = "none";
                                                }
                                            }

                                        </script>


                                    </tr>


                                    <?php $i++;
                                endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="7" class="text-center">No Packages found</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</section>



<?= $this->endSection() ?>