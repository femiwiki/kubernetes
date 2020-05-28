Femiwiki Kubernetes YAML
========

페미위키 서비스 YAML 파일. `infra` YAML이 먼저 배포된 뒤에 배포되어야 합니다.

```bash
# Secret 준비하기
sudo mkdir -p /srv/femiwiki.com/secrets
sudo curl -s https://raw.githubusercontent.com/femiwiki/kubernetes/master/femiwiki/production/secrets/bot-secret.example.yml -o /srv/femiwiki.com/secrets/bot-secret.yml
sudo curl -s https://raw.githubusercontent.com/femiwiki/kubernetes/master/femiwiki/production/secrets/secret-local-settings.example.yml -o /srv/femiwiki.com/secrets/secret-local-settings.yml
# 두 파일 수정하기
sudo vim /srv/femiwiki.com/secrets/bot-secret.yml
sudo vim /srv/femiwiki.com/secrets/secret-local-settings.yml
# Secret 배포하기
kubectl apply -f https://github.com/femiwiki/kubernetes/raw/master/femiwiki/production/namespace.yml
kubectl apply -f /srv/femiwiki.com/secrets/

# 개발환경 배포하기
kubectl apply -k github.com/femiwiki/kubernetes/femiwiki/development

# 로컬에 있는 YAML로 배포하기
kubectl apply -k ./development
# 배포될 YAML 확인하기
kubectl kustomize ./development

# 페미위키 테스트 서버 (https://test.femiwiki.com) 배포하기
kubectl apply -k github.com/femiwiki/kubernetes/femiwiki/test

# 프로덕션 배포하기
kubectl apply -k github.com/femiwiki/kubernetes/femiwiki/production
```
