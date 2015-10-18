# Web-Program
function postBlog(){
		var input_title = document.getElementById('input_title').value;
		var input_author_first = document.getElementById('input_author_first').value;
		var input_author_last = document.getElementById('input_author_last').value;
		var input_content = document.getElementById('input_content').value;
		document.getElementById('title').innerHTML = input_title;
		var date_today = new Date();
		document.getElementById('author_name').innerHTML = input_author_first + ' ' + input_author_last + ' ' + date_today;
		document.getElementById('content').innerHTML = input_content;
}
