new="$1"
new="${new//_/-}"
NEWUP=`echo "$new" | tr '[:lower:]' '[:upper:]'`
New="${new^}"
cat <<EOF >templates/pages/${new}.html.twig
{% extends 'base.html.twig' %}

{% block title %}${New}{% endblock %}
$()
{% block main %}
<div class="container marketing mt-5">
    <h1>${New} page</h1>
</div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('${new}') }}
{% endblock %}

EOF
cat <<EOF >assets/js/${new}.js
import '../css/${new}.scss';

EOF
cat <<EOF >assets/css/${new}.scss
body {
}


EOF