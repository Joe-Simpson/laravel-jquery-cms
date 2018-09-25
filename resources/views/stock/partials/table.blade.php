<table data-toggle="table" 
       data-pagination="true" 
       data-search="true"
       data-classes="table table-condensed"
       data-striped="true">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Make</th>
            <th scope="col">Model</th>
            <th scope="col">Boxed</th>
            <th scope="col">Condition</th>
            <th scope="col">Seized</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach( $stock as $stock_item )
            <tr>
                <td>{{ $stock_item->id }}</th>
                <td>{{ $stock_item->make }}</td>
                <td>{{ $stock_item->model }}</td>
                <td>{{ $stock_item->boxed }}</td>
                <td>{{ $stock_item->condition }}</td>
                <td>
                    <a href="/stock/{{ $stock_item -> id }}">
                        <span class="badge badge-secondary">Details</span>
                    </a>
                    @if ( ! isset($stock_item->sales) )
                    <a href="/sales/create?stock_id={{ $stock_item -> id }}">
                        <span class="badge badge-success">Sell</span>
                    </a>
                    @else
                    <a href="/sales/{{ $stock_item -> sales -> id }}">
                        <span class="badge badge-danger">Sold</span>
                    </a>
                    @endif
                </td>
                <td>
                    @if ($stock_item->seized)
                        Seized on {{ $stock_item->seized_date->format('d-m-Y') }}
                    @else
                        False
                    @endif
                </td>
           </tr>
        @endforeach
    </tbody>
</table>