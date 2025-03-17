@include('backend.dashboard.component.breadcrumb',['title'=> $config['seo']['create']['title']])

<form action="" method="" class="box">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin chung</div>
                    <div class="panel-description">Nhập thông tin chung của người sử dụng</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="inbox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-lable text-left">Email 
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="text" name="email" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-lable text-left">Họ Tên 
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="text" name="name" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-lable text-left">Nhóm Thành Viên 
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <select name="" id="" class="form-control">
                                        <option value="volvo">[Chọn Nhóm Thành Viên]</option>
                                        <option value="saab">Quản trị viên</option>
                                        <option value="mercedes">Cộng tác viên</option>
                                      </select>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-lable text-left">Ngày Sinh</label>
                                    <input type="text" name="name" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-lable text-left">Mật Khẩu 
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="text" name="password" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-lable text-left">Nhập Lại Mật Khẩu
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="text" name="rpassword" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-lable text-left">Ảnh Đại Diện</label>
                                    <input type="text" name="password" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Thông tin liên hệ --}}
        <hr>
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông Tin Liên Hệ</div>
                    <div class="panel-description">Nhập thông tin liên hệ của người sử dụng</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="inbox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-lable text-left">Thành Phố</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">[Chọn Thành Phố]</option>
                                        <option value="">Hà Nội</option>
                                        <option value="">TP HCM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-lable text-left">Quận/Huyện</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">[Chọn Quận/Huyện]</option>
                                        <option value="">Hà Nội</option>
                                        <option value="">TP HCM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-lable text-left">Phường/Xã</label>
                                    <select name="" id="" class="form-control">
                                        <option value="volvo">[Chọn Phường/Xã]</option>
                                        <option value="saab">Quản trị viên</option>
                                        <option value="mercedes">Cộng tác viên</option>
                                      </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-lable text-left">Địa Chỉ</label>
                                    <input type="text" name="address" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-lable text-left">Số Điện Thoại</label>
                                    <input type="text" name="numberphone" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-lable text-left">Ghi Chú</label>
                                    <input type="text" name="des" class="form-control" value="" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt10">
            <button class="btn btn-primary" type="button" name="send" value="">Lưu Lại</button>
        </div>
    </div>
</form>