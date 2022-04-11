       <style>
           .transition{
             height: 80vh;
             width: 100%;
             display: flex;
             align-items: center;
             flex-direction: column;
             justify-content: center;
             text-align: center !important;
           }
           .transit_container .form_d{
               display: flex;
           }
           .transit_container .form_d .form_df{
               margin-right: 15px;
               margin-left: 15px;
           }
           .form_df button{
               font-family: Arial, Helvetica, sans-serif !important;
               letter-spacing: .8px !important;
               font-size: 18px;
      
           }
       </style>    
           <!-- transition -->
            <div class="transition">
                <h1>Select Branch & Level</h1><br>
                <div class="transit_container">
                    <form action="" method="POST">
                        <div class="form_d">
                            <div class="form_df">
                            <div class="form-group">
                            <select class="form-control select2" name="branch_select" style="width: 100%;" onchange="fetch_select(this.value);" >
                            <option>Please Select Branch</option>
                            <option>WATOP</option>

                            </select>
                         </div>
                          </div>
                            <div class="form_df">
                            <div class="form-group">
                            <select class="form-control select2" name="level_select" style="width: 100%;">
                            <option selected="selected">Please Select Branch level</option>
                            <option>Alaska</option>
                            </select>
                           </div>
                            </div>
                        </div><br>
                        <select id="new_select">
                        </select>
                        <div class="form_df">
                        <button name="save" class="btn btn-primary" >Validate Selection </button>
                        </div>
                    </form>
                </div>
            </div>
