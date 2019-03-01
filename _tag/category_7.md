---
layout: home
title: "Tag: hololens"
tag: category_7
---

<div id="home">
  <h1>Категория project_7</h1>
  <hr />

  <ol class="posts">
         <li><a href="/python/bash/2016/04/19/remove-all-files-pyc-with-recrusive-method.html">Test post 1</a> &raquo; <i><span>{{ post.date | date_to_string }}</span></i></li>
         <li><a href="/python/bash/2016/04/19/remove-all-files-pyc-with-recrusive-method.html">Test post 2</a> &raquo; <i><span>{{ post.date | date_to_string }}</span></i></li>
         <li><a href="/python/bash/2016/04/19/remove-all-files-pyc-with-recrusive-method.html">Test post3</a> &raquo; <i><span>{{ post.date | date_to_string }}</span></i></li>
         <li><a href="/python/bash/2016/04/19/remove-all-files-pyc-with-recrusive-method.html">Test post4</a> &raquo; <i><span>{{ post.date | date_to_string }}</span></i></li>
         <li><a href="/python/bash/2016/04/19/remove-all-files-pyc-with-recrusive-method.html">Test post 5</a> &raquo; <i><span>{{ post.date | date_to_string }}</span></i></li>
         <li><a href="/python/bash/2016/04/19/remove-all-files-pyc-with-recrusive-method.html">Test post 6</a> &raquo; <i><span>{{ post.date | date_to_string }}</span></i></li>
         <li><a href="/python/bash/2016/04/19/remove-all-files-pyc-with-recrusive-method.html">Test post 7</a> &raquo; <i><span>{{ post.date | date_to_string }}</span></i></li>
         <li><a href="/python/bash/2016/04/19/remove-all-files-pyc-with-recrusive-method.html">Test post 8</a> &raquo; <i><span>{{ post.date | date_to_string }}</span></i></li>
      </ol>

  <!-- Pagination links -->
  {% if paginator.total_pages > 1 %}
    <ul class="pagination pagination-sm">
      {% if paginator.previous_page %}
        <li><a href="{{ paginator.previous_page_path | prepend: site.baseurl | replace: '//', '/' }}">&laquo;</a></li>
      {% else %}
        <li class="disabled"><span aria-hidden="true">&laquo;</span></li>
      {% endif %}

      <li><a href="/">First</a></li>

      {% for page in (1..paginator.total_pages) %}
        {% if page == paginator.page %}
          <li class="active"><a>{{ page }}<span class="sr-only">(current)</span></a></li>
        {% elsif page == 1 %}
          <li><a href="/">{{ page }}</a></li>
        {% else %}
          <li><a href="{{ site.paginate_path | prepend: site.baseurl | replace: '//', '/' | replace: ':num', page }}">{{ page }}</a></li>
        {% endif %}
      {% endfor %}

      <li><a href="/page/{{ paginator.total_pages }}/">Last</a></li>

      {% if paginator.next_page %}
        <li><a href="{{ paginator.next_page_path | prepend: site.baseurl | replace: '//', '/' }}">&raquo;</a></li>
      {% else %}
        <li class="disabled"><span>&raquo;</span></li>
      {% endif %}
    </ul>
  {% endif %}
</div><!-- end #home -->

