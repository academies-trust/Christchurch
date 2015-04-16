<div class="twitter_bar">
	<div class="container">
		<div class="row">
					<h4>Our Recent Tweets </h4>
									@if(count($twitter))
										@foreach($twitter as $tweet)
											<div class="col-md-3">
													<strong class="nowrap small">{{$tweet->ago->diffForHumans()}}</strong>
												<p><a href="https://twitter.com/@ChristChurchCE/status/{{$tweet->id_str}}" target="_blank">{{$tweet->text}}</a></p>
												</div>
										@endforeach
									@else
										No current tweets
									@endif

							<a href="https://twitter.com/@ChristChurchCE" target="_blank"><button class="btn btn-default pull-right">Follow us!</button></a>
						
						</div>	
	</div>
</div>