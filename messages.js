var messages = {
  error: {
    slugNotUnique: 'A game with that name has already been submitted. Please choose a different name.',
    invalidZipFormat: 'You have to submit a valid zip.',
    invalidZipSize: 'Your game exceeds the 13.312 bytes limits.',
    invalidImageFormat: 'Invalid format for image. Use jpeg, gif or png.',
    invalidImageSize: 'Images can not exceed 100kb.',
    gameAlreadyExists: 'A game with that name was already registered.',
    submissionNotFound: 'Submission not found.',
    submissionNotFoundOrAccepted: 'Submission not found or already accepted.',
    submissionNotFoundOrRejected: 'Submission not found or already rejected.',
    editionNotFound: 'Edition not found.',
    editionNotFoundOrNoLongerActive: 'Edition not found or no longer active.'
  }
}

module.exports = messages;
