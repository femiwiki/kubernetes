Femiwiki Kubernetes
========
- [`infra/`]: "infra" is YAMLs which should be deployed ahead of "service"
  YAMLs. It includes CertManager, Storage Class, etc.
- [`service/`]: "service" is actual YAMLs for Femiwiki services.

[`infra/`]: infra/
[`service/`]: service/

See [femiwiki/infra](https://github.com/femiwiki/infra) for Terraform codes of
Femiwiki infrastructure.
