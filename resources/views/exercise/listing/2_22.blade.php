<p>{{ __('exercises/2_22.description.1') }}
<code>square-list</code>
{{ __('exercises/2_22.description.2') }}
<a href="{{ route('exercises.show', getExercise('2.21')) }}">2.21</a>
{{ __('exercises/2_22.description.3') }} </p>
<pre><code>(define (square-list items)
  (define (iter things answer)
    (if (null? things)
        answer
        (iter (cdr things) 
              (cons (square (car things))
                    answer))))
  (iter items nil))
</code></pre>
<p>{{ __('exercises/2_22.description.4') }}
<code>square-list</code>
{{ __('exercises/2_22.description.5') }}
</p>
<p>{{ __('exercises/2_22.description.6') }}
<code>cons</code>
{{ __('exercises/2_22.description.7') }}
</p>
<pre><code>(define (square-list items)
  (define (iter things answer)
    (if (null? things)
        answer
        (iter (cdr things)
              (cons answer
                    (square (car things))))))
  (iter items nil))
</code></pre>
<p>{{ __('exercises/2_22.description.8') }}</p>
