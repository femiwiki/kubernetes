Femiwiki Infra YAML
========

페미위키 기반 YAML 파일. 서비스를 띄우기 전에 먼저 배포해주세요.

```bash
# 기반 YAML 파일 배포
kubectl apply -k github.com/femiwiki/kubernetes/infra/base

# CertManager 배포가 완료되었는지 체크
kubectl -n cert-manager get pods -w

# Let's Encrypt Issuer 배포
kubectl apply -f https://github.com/femiwiki/kubernetes/raw/master/infra/issuer-letsencrypt.yml
```
