<h3> {{ $job->title }} </h3>
<p>
    Congratulation! Your job is now live on our website!
</p>

<p>
    <a href=" {{ url('/jobs/' . $job->id) }} ">View Your Job Listing</a>
</p>
