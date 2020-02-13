Femiwiki Kubernetes YAML
========

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
