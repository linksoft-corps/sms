<?phpnamespace LinkSoft\Sms\Adapter;use GuzzleHttp\Exception\GuzzleException;use Hyperf\Utils\Codec\Json;use LinkSoft\Sms\Driver;/** * 创蓝通道 * Class Sms253 * @package LinkSoft\Sms */class Sms253 extends Driver{    public function send(string $country, string $mobile, string $content): bool    {        // TODO: Implement send() method.        try {            $data = [];            $data['account'] = $this->options['username'];            $data['password'] = $this->options['password'];            $data['mobile'] = substr($country, 1) . $mobile;            $data['msg'] = $content;            $response = $this->client->post($this->options['api'], [                'json' => $data,            ]);            $result = $response->getBody()->getContents();            $result = Json::decode($result, true);            if (isset($result['code']) && $result['code'] == 0) {                return true;            }            $this->logger->error('send 253 notice error ' . $result['errorMsg'] ?? $result['error']);            return false;        } catch (GuzzleException $exception) {            $this->logger->error('send 253 notice error ' . $exception->getMessage());            return false;        }    }}