$(function() {
	$('.delete').click(function() {
		if (!confirm('Etes-vous sûr de vouloir supprimer cet enregistrement?')) {
			return false;
		}
	});

	// jepensait que il falais la confirmation apres le edit aussi, mais apres avoir relu la grille, il s'avere que non, donc je désactive.
	// $('.edit').submit(function() {
	//   if (!confirm('Etes-vous sûr de vouloir éditer cet enregistrement?')) {
	//     return false;
	//   }
	// });
});
