<div class="tab-pane fade " id="pills-Friends" role="tabpanel" aria-labelledby="pills-Friends-tab">
    <div class="userTableCustom mt6">
        <!-- <h1 class="mb4 d-flex justify-content-between align-items-center"> -->
        <table>
                <tr>
                    <th>
                        Players
                    </th>
                </tr>
                @foreach ($user->friends as $item )

                <tr>
                    <td>
                        @if ($item)
                        <a href="{{route('chat',$item->id)}}" style="    color: #5f5f5f;text-decoration: none;">
                            {{@$item->name}}
                        </a>
                        @else
                        <h1>No Data Found</h1>
                        @endif
                    </td>

                </tr>
                @endforeach
                </table>
        <!-- </h1> -->
    </div>
</div>
