---
statblock: true
name: Wraith
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Undead
cr: 5
ac: 13
hp: 67
hit_dice: '9d8 + 27'
speed: '0 ft., fly 60 ft. (hover)'
stats:
    - 8
    - 16
    - 16
    - 12
    - 16
    - 14
damage_resistances: 'acid, cold, lightning, thunder; damage from nonmagical, non-silvered weapons'
damage_immunities: 'necrotic, poison'
condition_immunities: 'charmed, fatigue, grappled, paralyzed, petrified, poisoned, prone, restrained, unconscious'
senses: 'darkvision 120 ft., passive Perception 12'
languages: 'the languages it knew in life'
traits:
    - { name: 'Aura of Fear', desc: "A creature that starts its turn within 10 feet of a wraith makes a DC 13 Wisdom saving throw. On a failure, it is frightened until the start of its next turn. If a creature's saving throw is successful or the effect ends for it, it is immune to any wraith's Aura of Fear for 24 hours." }
    - { name: Evil, desc: 'The wraith radiates an Evil aura.' }
    - { name: Incorporeal, desc: 'The wraith can move through creatures and objects. It takes 5 (1d10) force damage if it ends its turn inside an object. If it takes radiant damage, it loses this trait until the end of its next turn.' }
    - { name: 'Light Sensitivity', desc: 'While in sunlight or bright light cast by a fire, the wraith has disadvantage on attack rolls, as well as on Perception checks that rely on sight.' }
    - { name: 'Undead Nature', desc: "A wraith doesn't require air, food, drink, or sleep." }
actions:
    - { name: 'Life Drain', desc: 'The wraith targets a creature within 5 feet, forcing it to make a DC 14 Constitution saving throw. On a failure, the creature takes 14 (4d6) necrotic damage, or 21 (6d6) necrotic damage if it is frightened or surprised, and its hit point maximum is reduced by an amount equal to the damage taken. This reduction lasts until the creature finishes a long rest. It dies if its hit point maximum is reduced to 0.' }
    - { name: 'Create Specter', desc: "The wraith touches a humanoid corpse it killed less than 1 day ago. The creature's spirit rises as a specter under the wraith's control." }
combat:
    - { name: 'The wraith strikes the weakest-looking or most isolated target, phasing through a solid object to attack if possible', desc: 'It stays close to its target in order to inflict fear on it, thus gaining the most from its Life Drain. Once a creature is no longer frightened by it, it flies away (taking opportunity attacks if necessary) and tries to frighten and drain another target. It flees if it takes force, radiant, or psychic damage while bloodied.' }

---
```statblock
monster: Wraith
```
