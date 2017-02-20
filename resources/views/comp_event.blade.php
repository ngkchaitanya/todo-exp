<div class="blog-post">



    <table cellpadding="8px">
        <tr>
            <td width="80%">
                <h2 style="font-size: 30px; text-align: justify" class="blog-post-title">

                    {{ $event->event }}

                </h2>
                <h2 style="font-size: 20px" class="blog-post-title">
                    Deadline: {{ $event->deadline }}
                </h2>

            </td>
            <td>

                @if ($event->deadline > date('Y-m-d'))
                    <h2 style="color:green; font-size: 25px">Event completed early.</h2>
                @elseif ($event->deadline < date('Y-m-d'))
                    <h2 style="color:red; font-size: 25px">Event delayed.</h2>
                @else
                <h2 style="color:deepskyblue; font-size: 25px">Event completed on time.</h2>
                @endif



            </td>
        </tr>

    </table>



</div>