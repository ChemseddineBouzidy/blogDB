
<x-master title="Mon Profile ">



<div class="container">
    @foreach($Blog as $Blogs)
    <div class="card">
   
      <div class="card__header">
        <img src="{{ asset('storage/'.$Blogs->image) }}" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <span class="tag tag-blue">Technology</span>
        <h4>What's new in 2022 Tech</h4>
        <p>{!! Str::limit($Blogs->description,170,'....etc')!!} <a href="{{route('post.show',$Blogs->id)}}" class="btn2">Read more</a></p>
      </div>
      <div class="card__footer">
        <div class="user">
          <img src="https://i.pravatar.cc/40?img=1" alt="user__image" class="user__image">
          <div class="user__info">
            <h5>Jane Doe</h5>
            <small>2h ago</small>
          </div>
        </div>
      </div>
 
    </div>
    @endforeach
   
  </div>
</x-master> 
