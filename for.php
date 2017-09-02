  @php
   $results = DB::select('select * from goods where User_id = ?', [Auth::user()->id]);
   print_r ($results);
  @endphp
  </pre>
  @foreach($results as $result => $val)
     <div style="">{{($val['Title'])}} - Описание: {{($val['Description'])}} - Цена: {{($val['Price'])}} ₽<div style="float:right;">X</div></div>
    @endforeach
