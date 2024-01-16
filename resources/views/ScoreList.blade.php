<x-layout>
@csrf
<div class="footer_menu4_index">Lista wyników</div>
<div class="score_grid">
     @foreach($records as $record)
      <span class="qgrid ">{{ $record->name }}</span>
      <span class="qgrid ">{{ $record->points }}</span>
      @endforeach
      </div>  
      <a href="{{url('/')}}" class="footer_menu3_index"> Wróć na główną </a>
    
    
</x-layout>
