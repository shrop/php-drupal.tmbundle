/**
 * Implements hook_node_update_index().
 */
function <?php print $basename; ?>_node_update_index(\$node) {
  ${1:\$text = '';
  \$comments = db_query('SELECT subject, comment, format FROM {comment\} WHERE nid = :nid AND status = :status', array(':nid' => \$node->nid, ':status' => COMMENT_PUBLISHED));
  foreach (\$comments as \$comment) {
    \$text .= '<h2>' . check_plain(\$comment->subject) . '</h2>' . check_markup(\$comment->comment, \$comment->format, '', TRUE);
  \}
  return \$text;}
}

$2