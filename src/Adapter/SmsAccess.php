<?phpnamespace LinkSoft\Sms\Adapter;use GuzzleHttp\Exception\GuzzleException;use LinkSoft\Sms\Driver;/** * access you 通道 * Class SmsAccess * @package LinkSoft\Sms */class SmsAccess extends Driver{    public function send(string $country, string $mobile, string $content): bool    {        // TODO: Implement send() method.=        try {            $options = [];            $options['accountno'] = $this->options['username'];            $options['pwd'] = $this->options['password'];            $options['phone'] = substr($country, 1) . $mobile;            $options['msg'] = $content;            $response = $this->client->get($this->options['api'] . '?' . http_build_query($options));            if ($response->getStatusCode() == 200) {                return true;            }            return false;        } catch (GuzzleException $exception) {            $this->logger->error('send access you sms error ' . $exception->getMessage());            return false;        }    }}