<?php

 namespace App\Controllers;

 use Psr\Http\Message\RequestInterface;
 use Psr\Http\Message\ResponseInterface;

 class ContactController extends Controller
 {
   public function save_contact(RequestInterface $request, ResponseInterface $response)
   {
     $params = $request->getParams();
     $error = null;
     if (isset($params['name']) && !empty($params['name']) &&
        isset($params['mail']) && !empty($params['mail']) &&
        isset($params['object']) && !empty($params['object']) &&
        isset($params['message']) && !empty($params['message']))
      {
        $name = htmlspecialchars($params['name']);
        $mail = htmlspecialchars($params['mail']);
        $object = htmlspecialchars($params['object']);
        $message = htmlspecialchars($params['message']);
        if (strlen($name) < 255 && strlen($mail) < 255 && strlen($object) < 255)
        {
          if (filter_var($mail, FILTER_VALIDATE_EMAIL))
          {
            $req = $this->container->pdo->prepare('INSERT INTO commentaire (name, mail, objet, content) VALUES (:name, :mail, :objet, :content)');
            $ret = $req->execute(array(
              ':name' => $name,
              ':mail' => $mail,
              ':objet' => $object,
              ':content' => $message
            ));
          }
          else
            $error = 'Votre adresse mail est invalide';
        }
        else
          $error = 'Vous avez dépasser le nombre de caracteres maximal (255)';
      }
      else
        $error = 'Vous devez remplir tous les champs';
      $message = ($error) ? $error : 'Votre message a bien été envoyé';
      return $this->render($response, 'pages/contact.twig', ['flash' => $this->flash($message, ($error) ? 'error' : 'success')]);
   }
 }
 /*
 $users = $this->container->pdo->query('SELECT * FROM users')->fetchAll();
 $params = $request->getParams();
return $response->withRedirect('/dashboard');
 */

?>
