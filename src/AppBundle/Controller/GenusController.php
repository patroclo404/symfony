<?php	


namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

	class GenusController extends Controller{

		/**
		 * @Route("/genus/{genusName}")
		 */
		public function showAction($genusName){
			# code...

			//$templating = $this->container->get('templating');
			//return new Response($html);
			$notes = [
				'hola mundo',
				'hola hola',
				'mundo mundo'
			];
			return $this->render('genus/show.html.twig',[
					'name' => $genusName,
					'notes' => $notes	]);
		}


		/**
		 * @Route("/genus/{genusName}/notes", name="genus_show_notes")
		 * @Method("GET")
		 */

		public function getNotesAction($genusName){
			$notes = [
				['id' => 1, 'username' => 'juan', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'hola soy juan', 'date' => 'dec. 28, 2015'],
				['id' => 2, 'username' => 'pedro', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'hola soy pedro', 'date' => 'dec. 28, 2016'],
				['id' => 1, 'username' => 'luis', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'hola soy luis', 'date' => 'dec. 28, 2020'],
			];

			$data = [
				'notes' => $notes,
			];

			return new JsonResponse($data);
		} 

	}