<?PHP


namespace Acme;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use GuzzleHttp\ClientInterface;
use zipArchive;


class NewCommand extends Command{
	
	private $client;

	public function __construct(ClientInterface $client)
	{
		$this->client = $client;

		parent::__construct();
	}




	
	public function configure()
	{
		
		$this->setName('new')
			->setDescription('Create a new Laravel application')
			->addArgument('name',InputArgument::REQUIRED);	
		}

	public function execute(InputInterface $input,OutputInterface $output)
	{

		//assert that the folder we require doesn't already exist;

		$directory = getcwd().'/'.$input->getArgument('name');

		$output->writeln('<info>Crafting Application...</info>');


		$this->assertApplicationDoesNotExist($directory,$output);

		// download nightly version on Laravel

		// extract that zip file

		$this->download($zipFile = $this->makeFileName())
			->extract($zipFile,$directory)
			->cleanUp($zipFile);

		
		// alert the use that they are ready to go.

		$output->writeln('<comment>Application Ready!</comment>');

	}

	private function assertApplicationDoesNotExist($directory,OutputInterface $output)
	{
		if(is_dir($directory)){

			$output->writeln('<error>Application Already Exist!</error>');
			exit(1);
		}
	}

	private function makeFileName()
	{
		return getcwd() . '/laravel_' .md5(time().uniqid()).'zip';
	
	}

	protected function download($zipFile)
	{
		
		$response = $this->client->get('http://cabinet.laravel.com/latest.zip')->getBody();
		file_put_contents($zipFile,$response);

		return $this;
	}

	protected function extract($zipFile,$directory)
	{
		
		$archive = new zipArchive;
		$archive->open($zipFile);
		$archive->extractTo($directory);
		$archive->close();
		return $this;
	}

	private function cleanUp()
	{
		@chmod($zipFile, 0777);
		@unlink($zipFile);
		return $this;
	}

}

