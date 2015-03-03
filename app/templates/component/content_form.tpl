      <!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
			   <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                       计算机信息系统修改申请审批单
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Form Stuff</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Form Validation
                       </li>
                    
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->

           

            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="widget blue">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>&nbsp;&nbsp;填写申请单</h4>
                            <div class="tools">
							    <span class="label label-info" style="margin-bottom:0px;">未审批...</span>
								
                                <a href="javascript:;" class="collapse">未审批...</a>
                                <a href="#portlet-config" data-toggle="modal" class="config">2</a>
                                <a href="javascript:;" class="reload">3</a>
                                <a href="javascript:;" class="remove">4</a>
                            </div>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->

                            <form class="cmxform form-horizontal" id="commentForm" method="get" action="">
							填写申请单
							<hr/>
                                <div class="control-group ">
                                    <label for="cname" class="control-label">Name (required)</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="name" minlength="2" type="text" required />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="cemail" class="control-label">E-Mail (required)</label>
                                    <div class="controls">
                                        <input class="span6 " id="cemail" type="email" name="email" required />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="curl" class="control-label">URL (optional)</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="url" name="url" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="ccomment" class="control-label">Your Comment (required)</label>
                                    <div class="controls">
                                        <textarea class="span6 " id="ccomment" name="comment" required></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button class="btn btn-success" type="submit">Save</button>
                                    <button class="btn" type="button">Cancel</button>
                                </div>


                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="widget red">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Advanced form Validation</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form class="cmxform form-horizontal" id="signupForm" method="get" action="">
                                <div class="control-group ">
                                    <label for="firstname" class="control-label">Firstname</label>
                                    <div class="controls">
                                        <input class="span6 " id="firstname" name="firstname" type="text" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="lastname" class="control-label">Lastname</label>
                                    <div class="controls">
                                        <input class="span6 " id="lastname" name="lastname" type="text" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="username" class="control-label">Username</label>
                                    <div class="controls">
                                        <input class="span6 " id="username" name="username" type="text" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="password" class="control-label">Password</label>
                                    <div class="controls">
                                        <input class="span6 " id="password" name="password" type="password" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="confirm_password" class="control-label">Confirm Password</label>
                                    <div class="controls">
                                        <input class="span6 " id="confirm_password" name="confirm_password" type="password" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="email" class="control-label">Email</label>
                                    <div class="controls">
                                        <input class="span6 " id="email" name="email" type="email" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="agree" class="control-label">Agree to Our Policy</label>
                                    <div class="controls">
                                        <input  type="checkbox" class="checkbox" id="agree" name="agree" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="newsletter" class="control-label">Receive the Newsletter</label>
                                    <div class="controls">
                                        <input  type="checkbox" class="checkbox" id="newsletter" name="newsletter" />
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button class="btn btn-success" type="submit">Save</button>
                                    <button class="btn" type="button">Cancel</button>
                                </div>

                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>

            <!-- END PAGE CONTENT-->

         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->