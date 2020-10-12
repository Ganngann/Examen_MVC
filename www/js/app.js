$(function() {
  $('.delete').click(function() {
    if (!confirm('Etes-vous sûr de vouloir supprimer cet enregistrement?')) {
      return false;
    }
  });
  $('.edit').submit(function() {
    if (!confirm('Etes-vous sûr de vouloir éditer cet enregistrement?')) {
      return false;
    }
  });
});
