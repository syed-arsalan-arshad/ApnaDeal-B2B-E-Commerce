<?php

$out = '
<div class="card-header">
                    <h4>Change Password</h4>
                </div>
                <div class="card-body text-left">
                    <form method="post" action="">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                            </div>
                            <input type="password" id="pass" class="form-control" required placeholder="Enter Password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                            </div>
                            <input type="password" id="cpass" class="form-control" required placeholder="Re-Enter Password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <input type="button" onclick="verifyPassword();" value="Change Password" class="btn btn-info btn-block">
                    </form>
                </div>
';
echo $out;
?>