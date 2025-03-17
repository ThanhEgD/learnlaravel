<table class="table table-striped">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox" />
        </th>
        <th>Ảnh Đại Diện</th>
        <th>Họ và Tên</th>
        <th>Email</th>
        <th>Số Điện Thoại</th>
        <th>Địa Chỉ</th>
        <th>Trạng Thái</th>
        <th>Thao Tác</th>
    </tr>
    </thead>
    <tbody>

        @if(isset($users) && is_object($users))

            @foreach($users as $user)
                
                <tr>
                    <td> 
                        <input type="checkbox" value="" class="input-checkbox checkboxItem"/> 
                    </td>
                    <td>
                        <span class="image">
                            <img src="https://toppng.com/uploads/preview/avatar-png-11554021819gij72acuim.png" alt="" width="60" height="60">
                        </span>
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                    <td>
                        <input type="checkbox" class="js-switch" checked />
                    </td>
                    <td>
                        <a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                    {{-- <td class="text-navy"> <i class="fa fa-level-up"></i> 40% </td> --}}
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{ $users->links('pagination::bootstrap-4') }}
{{-- <script>
    $(document).ready(function(){
        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394' });
    });
</script> --}}