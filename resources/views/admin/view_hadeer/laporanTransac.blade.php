<table>
    <thead>
        <tr>
            
        </tr>
    </thead>
    <tbody>
        @foreach($laporan as $l)
            <tr>
                <td>Date</td>
                <td>{{$l->created_at}}</td>  
            </tr>
            <tr>
                <td>Served By</td>
                <td>{{$l->user->name}}</td>
            </tr>
            <tr>
                <td>Detail</td> 
                <td>Item</td>   
                <td>Price</td>
                <td>Qty</td>
                <td>Subtotal</td>
            </tr>
            @foreach($l->detail as $d)
            <tr>
                <td></td>
                <td>{{$d->item->name}}</td>   
                <td>{{$d->item->price}}</td>  
                <td>{{$d->qtt}}</td>
                <td>{{$d->subtotal}}</td>
            </tr>
            @endforeach
            <tr>
                <td></td>   
                <td></td>   
                <td></td>
                <td>Total</td>
                <td>{{$l->total}}</td>
            </tr>
            <tr>
                <td></td>   
                <td></td>   
                <td></td>
                <td>Pay Total</td>
                <td>{{$l->pay_total}}</td>
            </tr>
            <tr>
                <td></td>   
                <td></td>   
                <td></td>
                <td>Change</td>
                <td>{{$l->pay_total - $l->total}}</td>
            </tr>
            <tr></tr>
        @endforeach
        <tr></tr>
        <tr>
            <td>Total Penjualan:</td>
            <td>Rp.{{number_format($laporan->sum(function($data){return $data->total; }))}}</td>
        </tr>
    </tbody>
</table>



{{-- <table>
    <thead>
        <tr>
        <th><b>Date</b></th>   
        <th><b>Served By</b></th>
        <th><b>Item</b></th>
        <th><b>Qty</b></th>
        <th><b>Total</b></th>
        <th><b>Pay Total</b></th>
        <th><b>Change</b></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($laporan as $l)
    <tr>
        <td>{{$l->created_at}}</td>
        <td>{{$l->user->name}}</td>
        @foreach ($l->detail as $d)  
        <td>{{$d->item->name}}</td>
        <td>{{$d->item->price}}</td>
        <td>{{$d->qtt}}</td>
        <td>{{$d->subtotal}}</td>
        @endforeach
        <td>{{$l->total}}</td>
        <td>{{$l->pay_total}}</td>
        <td>{{$l->pay_total - $l->total}}</td>
    </tr>
    @endforeach
</tbody>
</table> --}}