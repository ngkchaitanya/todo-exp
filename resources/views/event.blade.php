<div class="blog-post">



    <table cellpadding="8px">
        <tr>
            <td width="100%">
    <h2 style="font-size: 30px; text-align: justify" class="blog-post-title">

            {{ $event->event }}

    </h2>
                <h2 style="font-size: 20px" class="blog-post-title">
                    Deadline: {{ $event->deadline }}
                </h2>

            </td>
            <td>
                <form method="POST" action="/todo/edit">
                    {{ csrf_field() }}
                <h2 align="right">
                <input type="hidden" name="editid" value="{{ $event->id }}">

                <button type="submit" class="myb"><img src="http://cdn.mysitemyway.com/etc-mysitemyway/icons/legacy-previews/icons/glossy-black-3d-buttons-icons-business/080358-glossy-black-3d-button-icon-business-pencil7-sc49.png" style="height: 100%; wight: 100%; padding-bottom:5px"/></button>
                </h2>
                </form>
            </td>

            <td>
                <form method="POST" action="/todo/del">
                    {{ csrf_field() }}
                <h2 align="right">
                    <input type="hidden" name="delid" value="{{ $event->id }}">
                    <input type="hidden" name="comp" id="comp" value="1">
                    <button type="submit" class="btn btn-primary" onsubmit="return confirm('Are you sure?');">Mark as complete</button>
                </h2>
                </form>


            </td>

        </tr>
    </table>
    </form>


</div>