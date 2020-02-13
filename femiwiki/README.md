Femiwiki Kubernetes YAML
========

페미위키 서비스 YAML 파일. `infra` YAML이 먼저 배포된 뒤에 배포되어야 합니다.

```bash
# 개발환경 배포하기
kubectl apply -k github.com/femiwiki/kubernetes/femiwiki/development

# 로컬에 있는 YAML로 배포하기
kubectl apply -k ./development
# 배포될 YAML 확인하기
kubectl kustomize ./development

# 프로덕션 배포하기
kubectl apply -k github.com/femiwiki/kubernetes/femiwiki/production
```
