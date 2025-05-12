<div class="table-responsive">
    <table class="table table-responsive">
    <thead style="background: #d3d3d3">
    <tr>
        <th>Ref</th>
        <th>Email</th>
        <th>Name</th>
        <th>Amount</th>
        <th>Amount to Pay</th>
        <th>Amount Paid</th>
        <th>Bank</th>
        <th>Acct no</th>
        <th>Date</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody id="tableBody">
    @foreach($data as $item)
        <tr>
            <td>{{$item->ref}}</td>
            <td>{{$item->email}}</td>
            <td>
                @php $site = \App\Models\Webkey::where('key', $item->key)->site_name; @endphp
                {{$site ?? "name"}}
            </td>
            <td>{{number_format($item->amount, 2)}}</td>
            <td>{{number_format($item->amount_to_pay, 2)}}</td>
            <td>{{number_format($item->amount_paid, 2)}}</td>
            <td>{{$item->bank}}</td>
            <td>{{$item->account_no}}</td>
            <td>{{$item->created_at}}</td>
            <td>
                @if($item->status == 0)
                    <a style="margin: 2px" href="repush?id={{$item->id}}" onclick="return confirmrepush2();" class="btn btn-warning">Push </a>
                    <script>
                        function confirmrepush2() {
                            return confirm('Are you sure you want to Push');
                        }
                    </script>

                    <a href="repush?id={{$item->id}}&agent=1" onclick="return confirmrepush3();" class="btn btn-primary">Agent </a>
                    <script>
                        function confirmrepush3() {
                            return confirm('Are you sure you want to Push with Agent');
                        }
                    </script>


                @elseif($item->status == 3)
                    <a href="repush?id={{$item->id}}" onclick="return confirmrepush();" class="btn btn-pending">Pending</a>
                    <script>
                        function confirmrepush() {
                            return confirm('Are you sure you want to Push');
                        }
                    </script>
                @elseif($item->status == 4)
                    <a href="#" style="width: 100%" class="btn btn-success">User Funded</a>
                @elseif($item->status == 5)
                    <a href="#" class="btn btn-danger">Processing</a>

                @elseif($item->status == 8)
                    <span class="btn btn-warning">Partial Payment</span>

                    <a style="margin: 2px" href="repush?id={{$item->id}}" onclick="return confirmrepush2();" class="btn btn-success">Push </a>
                    <script>
                        function confirmrepush2() {
                            return confirm('Are you sure you want to Push');
                        }
                    </script>

                    <a href="repush?id={{$item->id}}&agent=1" onclick="return confirmrepush3();" class="btn btn-primary">Agent </a>
                    <script>
                        function confirmrepush3() {
                            return confirm('Are you sure you want to Push with Agent');
                        }
                    </script>


                @else
                    <a href="#" class="btn btn-success">Completed</a>
                @endif
            </td>

            <td>
                @if($item->status != 4)
                <a href="delete-trx?id={{$item->id}}" onclick="return confirmrepush();" class="btn btn-danger">Delete</a>
                @endif
            </td>



        </tr>
    @endforeach
    </tbody>
</table>
</div>
<div>
    {{$data->links()}}
</div>
