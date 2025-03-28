<div class="filter-wrapper">
    <div class="uk-flex uk-flex-middle uk-flex-space-between">
        <div class="perpage">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <select name="perpage" class="form-control input-sm perpage filter mr10">
                    @for($i = 20; $i < 200; $i+=20)
                        <option value="{{ $i }}">{{ $i }} bản ghi</option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="action">
            <div class="uk-flex uk-flex-middle">
                <select name="user_catalogue_id" class="form-control input-sm perpage filter mr10">
                
                    <option value="0" selected="selected">Chọn Nhóm Thành Viên</option>
                    <option value="1">Quản trị viên</option>
                </select>
                <div class="uk-search uk-flex-middle mr10">
                    <div class="input-group">
                        <input type="text" name="keyword" value="" class="form-control" placeholder="Tìm kiếm...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary mb0 btn-sm" name="search" value="search">Tìm Kiếm</button>
                        </span>
                    </div>
                </div>
                <a href="{{route('user.create')}}" class="btn btn-danger"><i class="fa fa-plus"></i> Thêm mới thành viên</a>
            </div>
        </div>
    </div>
</div>